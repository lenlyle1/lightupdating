<?php

Class Redirect{

    public function handle($url, $noSave = true)
    {
        Debugger::debug('Redirecting to: ' . $url, 'REDIRECT');
        try{
            if(!$noSave){
                $this->saveRedirect($url);
            }
        } catch (exception $e){
            echo $e->getMessage();
        }

        $this->sendTo($url);
    }

    private function saveRedirect($url)
    {
        global $db;

        $sql =  "INSERT INTO redirects
                (url, search_id, ts)
                VALUES
                (?, ?, ?)";
        $searchId = 1;
        $stmt = $db->prepare($sql);
        $stmt->execute(array($url, $searchId, time()));
        Debugger::debug($stmt->queryString);
        return;

    }

    private function sendTo($url)
    {
        header("Location: " . $url);
        exit;
    }
}