<?php

namespace App\Services;

class Slack
{

    private $token;

    public function __construct()
    {
        $this->token = env('SLACK_BOT_TOKEN');
    }

    private function doCurl($url, $postData)
    {
        $postData['token'] = $this->token;
        $postData['as_user'] = 'true';

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($postData));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
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
        $groupId = $response->group->id;

        return $this->sendToChannel($groupId, $message);
    }

    public function sendToChannel($channel, $message)
    {
        // Send the message
        $apiUrl = 'https://slack.com/api/chat.postMessage';
        return json_decode($this->doCurl($apiUrl, ['channel' => $channel, 'text' => $message]));
    }
}
