<?php

class Example_api {

    private $api_url;
    private $api_key;
    private $password;

    /**
     * Class Constructor
     *
     * @access public
     * @return null
     */

    public function __construct() {
        $this->api_url = 'https://cll.gathercontent.com/api/0.2.1/';
        $this->api_key = '4fee2aa43bbcb23dae04fc4c4ec0460ef712a097630ca92d61e45af2d20ff78f';
        $this->password = 'x'; // leave it as 'x'
    }

    /**
     * Function test_api
     *
     * Few test calls to GatherContent API
     *
     * @access public
     * @return null
     */

    public function test_api() {
        $query = $this->_curl('get_me');
        echo 'Me:<br>';
        echo 'Response code: '.$query['code'].'<br>';
        echo '<pre>';
        print_r(json_decode($query['response']));
        echo '</pre>';

        $query = $this->_curl('get_my_company');
        echo 'My company:<br>';
        echo 'Response code: '.$query['code'].'<br>';
        echo '<pre>';
        print_r(json_decode($query['response']));
        echo '</pre>';

        $query = $this->_curl('get_pages');
        echo 'My pages:<br>';
        echo 'Response code: '.$query['code'].'<br>';
        echo '<pre>';
        print_r(json_decode($query['response']));
        echo '</pre>';

        exit();
    }

    /**
     * Function _curl
     *
     * Using cURL to access GatherContent API
     *
     * @access private
     * @param string
     * @param array
     * @return array
     */

    private function _curl($command = '', $postfields = array()) {
        $postfields = http_build_query($postfields);
        $session = curl_init();

        curl_setopt($session, CURLOPT_URL, $this->api_url.$command);
        curl_setopt($session, CURLOPT_HTTPAUTH, CURLAUTH_DIGEST);
        curl_setopt($session, CURLOPT_HEADER, false);
        curl_setopt($session, CURLOPT_HTTPHEADER, array('Accept: application/json', 'Content-Type: application/x-www-form-urlencoded'));
        curl_setopt($session, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($session, CURLOPT_USERPWD, $this->api_key . ":" . $this->password);
        curl_setopt($session, CURLOPT_POST, true);
        curl_setopt($session, CURLOPT_POSTFIELDS, $postfields);

        if (substr($this->api_url, 0, 8) == 'https://') {
            curl_setopt($session, CURLOPT_SSL_VERIFYPEER, true);
        }

        $response = curl_exec($session);
        $httpcode = curl_getinfo($session, CURLINFO_HTTP_CODE);
        curl_close($session);

        return array( 'code' => $httpcode, 'response' => $response );
    }
}


?>
<html>
<head></head>
<body>
<?php

$apiInstance1 = new Example_api;

$apiInstance1->test_api();
?>
</body>
</html>