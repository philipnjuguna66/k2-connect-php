<?php

namespace Kopokopo\SDK\Data;

class CustomerCreatedData
{
    public function setData($result)
    {
        $data['id'] = $result['id'];
        $data['resourceId'] = $result['resourceId'];
        $data['topic'] = $result['topic'];
        $data['createdAt'] = $result['created_at'];

        $data['eventType'] = $result['event']['type'];

        $data['firstName'] = $result['event']['resource']['first_name'];
        $data['middleName'] = $result['event']['resource']['middle_name'];
        $data['lastName'] = $result['event']['resource']['last_name'];

        $data['msisdn'] = $result['event']['resource']['msisdn'];

        $data['linkSelf'] = $result['_links']['self'];
        $data['linkResource'] = $result['_links']['resource'];

        return $data;
    }
}