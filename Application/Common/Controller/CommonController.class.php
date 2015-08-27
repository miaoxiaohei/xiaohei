<?php
namespace Common\Controller;
use Think\Controller;

class CommonController extends Controller{

    public function _initialize(){

    }
    public function index(){

    }

    /**
     * 通用分页列表数据集获取方法
     *
     *  可以通过url参数传递where条件,例如:  index.html?name=asdfasdfasdfddds
     *  可以通过url空值排序字段和方式,例如: index.html?_field=id&_order=asc
     *  可以通过url参数r指定每页数据条数,例如: index.html?r=5
     *
     * @param sting|Model  $model   模型名或模型实例
     * @param array        $where   where查询条件(优先级: $where>$_REQUEST>模型设定)
     * @param array|string $order   排序条件,传入null时使用sql默认排序或模型属性(优先级最高);
     *                              请求参数中如果指定了_order和_field则据此排序(优先级第二);
     *                              否则使用$order参数(如果$order参数,且模型也没有设定过order,则取主键降序);
     *
     * @param boolean      $field   单表模型用不到该参数,要用在多表join时为field()方法指定参数
     * @author
     *
     * @return array|false
     * 返回数据集
     */
    protected function lists ($model,$where=array(),$order='',$field=true,$total = 0){
        $options    =   array();
        $REQUEST    =   (array)I('request.');
        if(is_string($model)){
            $model  =   M($model);
        }

        $OPT        =   new \ReflectionProperty($model,'options');
        $OPT->setAccessible(true);

        $pk         =   $model->getPk();
        if($order===null){
            //order置空
        }else if ( isset($REQUEST['_order']) && isset($REQUEST['_field']) && in_array(strtolower($REQUEST['_order']),array('desc','asc')) ) {
            $options['order'] = '`'.$REQUEST['_field'].'` '.$REQUEST['_order'];
        }elseif( $order==='' && empty($options['order']) && !empty($pk) ){
            $options['order'] = $pk.' desc';
        }elseif($order){
            $options['order'] = $order;
        }
        unset($REQUEST['_order'],$REQUEST['_field']);

        /* 		if(empty($where)){
                    $where  =   array('status'=>array('egt',0));
                } */
        if( !empty($where)){
            $options['where']   =   $where;
        }
        $options      =   array_merge( (array)$OPT->getValue($model), $options );
        //新增,用于二次查询
        if($total == 0)
        {
            $total        =   $model->where($options['where'])->count();
        }

        if( isset($REQUEST['r']) ){
            $listRows = (int)$REQUEST['r'];
        }else{
            $listRows = C('LIST_ROWS') > 0 ? C('LIST_ROWS') : 10;
        }
        $page = new \Think\Page($total, $listRows, $REQUEST);
        if($total>$listRows){
            $page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% %HEADER%');
        }
        $p =$page->show();
        $this->assign('_page', $p? $p: '');
        $this->assign('_total',$total);
        $options['limit'] = $page->firstRow.','.$page->listRows;

        $model->setProperty('options',$options);
        //print_r($field);echo '<br>';
        //print_r($model->field($field)->select(false));die;
        return $model->field($field)->select();
    }

    /**
     * 获取当前页面完整URL地址
     */
    function get_url() {
        $sys_protocal = isset($_SERVER['SERVER_PORT']) && $_SERVER['SERVER_PORT'] == '443' ? 'https://' : 'http://';
        $php_self = $_SERVER['PHP_SELF'] ? $_SERVER['PHP_SELF'] : $_SERVER['SCRIPT_NAME'];
        $path_info = isset($_SERVER['PATH_INFO']) ? $_SERVER['PATH_INFO'] : '';
        $relate_url = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : $php_self.(isset($_SERVER['QUERY_STRING']) ? '?'.$_SERVER['QUERY_STRING'] : $path_info);
        return $sys_protocal.(isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : '').$relate_url;
    }




    public function ueditup(){
        header("Content-Type: text/html; charset=utf-8");
        $editconfig = json_decode(preg_replace("/\/\*[\s\S]+?\*\//", "", file_get_contents(COMMON_PATH."Conf/ueditconfig.json")), true);

//        dump($editconfig);
        $action = I('get.action');
//        echo $action;
        switch ($action) {
            case 'config':
                $result =  json_encode($editconfig);
                break;

            /* 上传图片 */
            case 'uploadimage':
                $result = $this->editup('img');
                break;
            /* 上传涂鸦 */
            case 'uploadscrawl':
                $result = $this->editup('img');
                break;
            case 'uploadvideo':
                $result = $this->editup('video');
                break;
            case 'uploadfile':
                $result = $this->editup('file');
                //$result = include("action_upload.php");
                break;

            /* 列出图片 */
            case 'listimage':
                $result = $this->editlist('listimg');
                break;
            /* 列出文件 */
            case 'listfile':
                $result = $this->editlist('listfile');
                break;

            /* 抓取远程文件 */
            case 'catchimage':
                //$result = include("action_crawler.php");
                break;

            default:
                $result = json_encode(array(
                    'state'=> '请求地址出错'
                ));
                break;
        }

        /* 输出结果 */
        if (isset($_GET["callback"])) {
            if (preg_match("/^[\w_]+$/", $_GET["callback"])) {
                echo htmlspecialchars($_GET["callback"]) . '(' . $result . ')';
            } else {
                echo json_encode(array(
                    'state'=> 'callback参数不合法'
                ));
            }
        } else {
            echo $result;
        }

    }


    public function editup($uptype){


        $editconfig = json_decode(preg_replace("/\/\*[\s\S]+?\*\//", "", file_get_contents(COMMON_PATH."Conf/ueditconfig.json")), true);
        switch ($uptype) {
            case 'img':
                $upload = new \Think\Upload();// 实例化上传类
                $upload->rootPath  =     '.';
                $upload->maxSize   =     $editconfig['imageMaxSize'];
                $upload->exts      =     explode('.', trim(join('',$editconfig['imageAllowFiles']),'.'));
                $upload->savePath  =     $editconfig['imagePathFormat'];
                $upload->saveName  =     time().rand(100000,999999);
                $info   =   $upload->uploadOne($_FILES[$editconfig['imageFieldName']]);
                break;
            case 'file':
                $upload = new \Think\Upload();// 实例化上传类
                $upload->rootPath  =     '.';
                $upload->maxSize   =     $editconfig['fileMaxSize'];
                $upload->exts      =     explode('.', trim(join('',$editconfig['fileAllowFiles']),'.'));
                $upload->savePath  =     $editconfig['filePathFormat'];
                $upload->saveName  =     time().rand(100000,999999);
                $info   =   $upload->uploadOne($_FILES[$editconfig['fileFieldName']]);
                break;
            case 'video':
                $upload = new \Think\Upload();// 实例化上传类
                $upload->rootPath  =     '.';
                $upload->maxSize   =     $editconfig['videoMaxSize'];
                $upload->exts      =     explode('.', trim(join('',$editconfig['videoAllowFiles']),'.'));
                $upload->savePath  =     $editconfig['videoPathFormat'];
                $upload->saveName  =     time().rand(100000,999999);
                $info   =   $upload->uploadOne($_FILES[$editconfig['videoFieldName']]);
                break;
            default:
                return false;
                break;
        }

        if(!$info) {// 上传错误提示错误信息
            $_re_data['state'] = $upload->getError();
            $_re_data['url'] = '';
            $_re_data['title'] = '';
            $_re_data['original'] = '';
            $_re_data['type'] = '';
            $_re_data['size'] = '';
        }else{// 上传成功 获取上传文件信息
            $_re_data['state'] = 'SUCCESS';
            $_re_data['url'] = $info['savepath'].$info['savename'];
            $_re_data['title'] = $info['savename'];
            $_re_data['original'] = $info['name'];
            $_re_data['type'] = '.'.$info['ext'];
            $_re_data['size'] = $info['size'];
        }

        return json_encode($_re_data);

    }

    public function editlist($listtype){
        $editconfig = json_decode(preg_replace("/\/\*[\s\S]+?\*\//", "", file_get_contents(COMMON_PATH."Conf/ueditconfig.json")), true);
        switch ($listtype) {
            case 'listimg':
                $allowFiles = $editconfig['imageManagerAllowFiles'];
                $listSize = $editconfig['imageManagerListSize'];
                $path = $editconfig['imageManagerListPath'];
                break;

            case 'listfile':
                $allowFiles = $editconfig['fileManagerAllowFiles'];
                $listSize = $editconfig['fileManagerListSize'];
                $path = $editconfig['fileManagerListPath'];
                break;

            default:
                return false;
                break;
        }
        /* 获取参数 */
        $size = isset($_GET['size']) ? htmlspecialchars($_GET['size']) : $listSize;
        $start = isset($_GET['start']) ? htmlspecialchars($_GET['start']) : 0;
        $end = $start + $size;

        /* 获取文件列表 */
        $path = $_SERVER['DOCUMENT_ROOT'] . (substr($path, 0, 1) == "/" ? "":"/") . $path;

        $files = $this->getfiles($path, $allowFiles);

        if (!count($files)) {
            return json_encode(array(
                "state" => "no match file",
                "list" => array(),
                "start" => $start,
                "total" => count($files)
            ));
        }

        /* 获取指定范围的列表 */
        $len = count($files);
        for ($i = min($end, $len) - 1, $list = array(); $i < $len && $i >= 0 && $i >= $start; $i--){
            $list[] = $files[$i];
        }
        //倒序
        //for ($i = $end, $list = array(); $i < $len && $i < $end; $i++){
        //    $list[] = $files[$i];
        //}

        /* 返回数据 */
        $result = json_encode(array(
            "state" => "SUCCESS",
            "list" => $list,
            "start" => $start,
            "total" => count($files)
        ));

        return $result;

    }


    /**
     * 遍历获取目录下的指定类型的文件
     * @param $path
     * @param array $files
     * @return array
     */
    public function getfiles($path, $allowFiles, &$files = array())
    {
        if (!is_dir($path)) return null;

        if(substr($path, strlen($path) - 1) != '/') $path .= '/';
        $handle = opendir($path);

        while (false !== ($file = readdir($handle))) {
            if ($file != '.' && $file != '..') {
                $path2 = $path . $file;
                if (is_dir($path2)) {
                    $this->getfiles($path2, $allowFiles, $files);
                } else {
                    //dump(pathinfo($file, PATHINFO_EXTENSION));	// 获取文件扩展名
                    if(in_array('.'.pathinfo($file, PATHINFO_EXTENSION), $allowFiles)){

                        $files[] = array(
                            'url'=> substr($path2, strlen($_SERVER['DOCUMENT_ROOT'])),
                            'mtime'=> filemtime($path2)
                        );
                    }
                }
            }
        }
        return $files;
    }




}
?>