<?php
class User
{
    use Logging;
    private string $username;

    /**
     * @throws Exception
     */
    public function __construct(string $username){
        $this->setUsername($username);
    }

    /**
     * @param string $username
     * @throws Exception
     */
    public function setUsername(string $username): void
    {
        if (empty($username) || strlen($username) < 3) {
            throw new Exception("Ім'я користувача повинно містити хочаб 3 символи.");
        }
        $this->username = $username;
    }

    /**
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }
}