<?php

namespace App\Common\Service\Sms\Engine;

use TencentCloud\Common\Credential;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Profile\HttpProfile;
use TencentCloud\Sms\V20190711\Models\SendSmsRequest;
use TencentCloud\Sms\V20190711\SmsClient;

/**
 * 腾讯云短信
 */
class TencentSms
{
    protected $error = null;
    protected $config;
    protected $mobile;
    protected $templateId;
    protected $templateParams;

    public function __construct($config)
    {
        if (empty($config)) {
            $this->error = '请联系管理员配置参数';
            return false;
        }
        $this->config = $config;
    }


    /**
     * @notes 设置手机号
     * @param $mobile
     * @return $this
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;
        return $this;
    }


    /**
     * @notes 设置模板id
     * @param $templateId
     * @return $this
     */
    public function setTemplateId($templateId)
    {
        $this->templateId = $templateId;
        return $this;
    }


    /**
     * @notes 设置模板参数
     * @param $templateParams
     * @return $this
     */
    public function setTemplateParams($templateParams)
    {
        $this->templateParams = $templateParams;
        return $this;
    }


    /**
     * @notes 获取错误信息
     * @return string|null
     */
    public function getError()
    {
        return $this->error;
    }


    /**
     * @notes 发送短信
     * @return false|mixed
     */
    public function send()
    {
        try {
            $cred = new Credential($this->config['secret_id'], $this->config['secret_key']);
            $httpProfile = new HttpProfile();
            $httpProfile->setEndpoint("sms.tencentcloudapi.com");

            $clientProfile = new ClientProfile();
            $clientProfile->setHttpProfile($httpProfile);

            $client = new SmsClient($cred, 'ap-guangzhou', $clientProfile);
            $params = [
                'PhoneNumberSet' => ['+86' . $this->mobile],
                'TemplateID' => $this->templateId,
                'Sign' => $this->config['sign'],
                'TemplateParamSet' => $this->templateParams,
                'SmsSdkAppid' => $this->config['app_id'],
            ];
            $req = new SendSmsRequest();
            $req->fromJsonString(json_encode($params));
            $resp = json_decode($client->SendSms($req)->toJsonString(), true);
            if (isset($resp['SendStatusSet']) && $resp['SendStatusSet'][0]['Code'] == 'Ok') {
                return $resp;
            } else {
                $message = $res['SendStatusSet'][0]['Message'] ?? json_encode($resp);
                throw new \Exception('腾讯云短信错误：' . $message);
            }
        } catch (\Exception $e) {
            $this->error = $e->getMessage();
            return false;
        }
    }
}
