<?php

namespace App\Traits;

trait FileUploaderTrait
{
    public $file_url='files/';
    public function uploadFile($data)
    {
        $response=array('name'=>null,'type'=>null,'mime_type'=>null,'url'=>null);
        //{fileName: 'abc.txt', type:"application or image", mime_type: 'application/txt', data: 'base64 content'}
        $name=$data['fileName'];
        $mime_type=$data['mime_type'];
        $type=$data['type'];
        $data=$data['data'];
        if(!($type=='application'||$type=='image'))
            return $response;
        $data = base64_decode($data);
        $name1=md5(microtime());
        $url = $this->file_url.$name1;
        file_put_contents($url, $data);
        $response['name']=$name;
        $response['type']=$type;
        $response['mime_type']=$mime_type;
        $response['url']=$name1;
        return $response;
    }
    public function setFiles($model,$val,$file_type='',$attachments=''){
       $append=array();
        $class=get_class($this);//
        if($val && !isset($val[0]))
            $val=array(0=>$val);
        if($model::where(['model_id'=>$this->id,'model_type'=>$class,'file_type'=>$file_type,'md5_key'=>md5(json_encode($val))])->first())
            return;
        $model::where(['model_id'=>$this->id,'model_type'=>$class,'file_type'=>$file_type])->delete();
        foreach ($val??array() as $key=>$value){
            $arr=array('file_name'=>$value,'model_id'=>$this->id,'model_type'=>$class,'md5_key'=>md5(json_encode($val)));
            $obj=$model::create($arr);
            array_push($append,$obj);
            $this->setAdditionalChanges([$attachments=>$append]);
            if($obj->errors()){
                $this->addError($obj->errors()->toArray());
                break;
            }
        }
    }

}