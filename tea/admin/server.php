<?php
/*接口  安全  双通道验证*/
/*$str="asdfgh";
echo strops($str,"g");
echo date("y-m-d");
*/
class upload{
    //public   开关键    private   私人的
    public $size;
    public $type="image/png;image/jpeg;image/gif";
    public $filename="file";
    private $data;
    public $uploadRoot="abc";
    private $fullpath;
    function _construct(){
        $this->size=1024*1024*10;
    }
    private function accept(){
        $this->data=$_FILES[$this->filename];
    }
    private function check(){
        if(is_uploaded_file($this->data["tmp_name"])){
            if($this->data["size"]<$this->size && strrchr($this->type,$this->data["type"])){
                return true;
            }
            return false;
        }
    }
    private function createDir(){
        //1.判断根目录存在吗
        /*if(is_dir($this->uploadRoot."/".$dir)){
            mkdir($this->uploadRoot."/".$dir,0777,true);
        }*/
        //2.判断当天的目录
        $dir=date("y-m-d");
        if(!is_dir($this->uploadRoot."/".$dir)){
            mkdir($this->uploadRoot."/".$dir,0777,true);
        }
        //3.创建文件的名字
        $name=time().mt_rand(0,1000).$this->data["name"];
        //4.整合路径
        $this->fullpath=$this->uploadRoot."/".$dir."/".$name;

    }
    public function fullmove(){
        move_uploaded_file($this->data["tmp_name"],$this->fullpath);
    }
    public function move(){
        //接收
        $this->accept();
        //检查
        if($this->check()){
            //创建目录
            $this->createDir();
            //移动到指定目录
            $this->fullmove();
            echo $this->fullpath();
        }else{
            echo "error";
        }
    }
}
/*$obj=new upload();
$obj->move();*/

?>
