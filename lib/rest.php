<?php
class rest {
    public function output(array $response){
        if($response['code'] == 10000){
            return $this->printGood($response);
        }
        $this->printBad($response);
    }
    private function printGood(array $response){
        header("HTTP/1.1 200 OK");
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode($response);
        return;
    }
    private function printBad(array $response){
        header("HTTP/1.1 400 Bad Request");
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode($response);
        return;
    }
}
