
<?php
try {
                $tracks = $client->get('tracks', array('user_id' => '39090345','limit' => 100));
            } catch (Services_Soundcloud_Invalid_Http_Response_Code_Exception $e) {
                print $e->getMessage();
            }

?>