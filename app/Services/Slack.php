<?php

namespace App\Services;

class Slack
{

    private $token;

    public function __construct()
    {
        $this->token = env('SLACK_BOT_TOKEN');
    }

    private function doCurl($url, $postData, $headers = [])
    {
        $postData['token']        = $this->token;
        $postData['as_user']      = 'true';
        $postData['unfurl_links'] = 'false';

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        if (empty($headers) !== true) {
            // curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        }

        $server_output = curl_exec($ch);

        curl_close($ch);

        return $server_output;
    }

    public function sendPrivateMessage($members, $message)
    {
        $apiUrl = 'https://slack.com/api/mpim.open';

        $userSlackIds = [];
        foreach ($members as $member) {
            $userSlackIds[] = $member->slack_id;
        }

        $userSlackIds = implode(',', $userSlackIds);

        $response = json_decode($this->doCurl($apiUrl, ['users' => $userSlackIds]));
        $groupId  = $response->group->id;

        return $this->sendToChannel($groupId, $message);
    }

    public function sendToChannel($channel, $message)
    {
        // Send the message
        $apiUrl = 'https://slack.com/api/chat.postMessage';
        return json_decode($this->doCurl($apiUrl, ['channel' => $channel, 'text' => $message]));
    }

    public function sendReceipt($person, $file, $comment)
    {
        $apiUrl = 'https://slack.com/api/files.upload';
        return json_decode($this->doCurl($apiUrl, [
            'channels'        => $person,
            'filename'        => $file->getClientOriginalName(),
            'file'            => new \CURLFile($file->getPathname()),
            'title'           => 'Another date receipt, from Cupid with love <3',
            'initial_comment' => $comment,
        ]));

    }
}
