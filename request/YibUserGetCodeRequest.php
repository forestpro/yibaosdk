<?php
/**
 * @SDK 获取短信验证码类
 * @User: 伯仁
 * @Email: boren@ybzf.com
 * @Date: 2015-05-04  
 */
class YibUserGetCodeRequest
{
    //接收验证码的手机号
    private $mobile;
    
    private $apiParas = array();
     
    public function getApiParas()
    {
        return $this->apiParas;
    }
     
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;
        $this->apiParas["mobile"] = $mobile;
    }
    
    public function getMobile()
    {
        return $this->mobile;
    }

    public function check()
    {
        RequestCheckUtil::checkNotNull($this->mobile,"mobile");
    }
    
    public function putOtherTextParam($key, $value) {
        $this->apiParas[$key] = $value;
        $this->$key = $value;
    }   
    
}
