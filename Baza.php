<?php

class Baza
{
    private string $url = 'localhost';
    private string $user = 'root';
    private string $password = 'Root.123';
    private string $database = 'ns_2019_0019_iteh_1';

    private ?mysqli $client = null;

    public function getConnection()
    {
        if(!$this->client) {
            $this->client = new mysqli($this->url, $this->user, $this->password, $this->database);
            $this->client->set_charset("utf8");
        }

        return $this->client;
    }

    public function disconnect()
    {
        $this->client->close();
    }
}
