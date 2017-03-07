<?php
/**
 * Created by PhpStorm.
 * User: Hoang Ngo
 * Date: 3/7/2017
 * Time: 7:39 PM
 */
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * @ORM\Entity
 * @UniqueEntity(fields="email", message="This email address is already in use")
 */
class User implements UserInterface
{
    /**
     * @ORM\Id;
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=255, unique=true)
     */
    protected $email;

    /**
     * @ORM\Column(type="string", length=40)
     */
    protected $name;

    /**
     * @ORM\Column(type="string", length=50)
     */
    protected $role;

    /**
     * @Assert\Length(max=4096)
     */
    protected $plainPassword;

    /**
     * @ORM\Column(type="string", length=64)
     */
    protected $password;

    public function eraseCredentials()
    {
        // TODO: Implement eraseCredentials() method.
        return null;
    }

    public function getRole()
    {
        // TODO: Implement getRoles() method.
        return $this->role;
    }
    public function setRole($role = null)
    {
        $this->role = $role;
    }
    public function getRoles()
    {
        // TODO: Implement getRoles() method.
        return[$this->getRole()];
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }
    public function setName($name)
    {
        return $this->name = $name;
    }

    public function getUsername()
    {
        // TODO: Implement getUsername() method.
        return $this->email;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getPassword()
    {
        // TODO: Implement getPassword() method.
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function getPlainPassword()
    {
        return $this->plainPassword;
    }

    public function setPlainPassword($plainPassword)
    {
        $this->plainPassword = $plainPassword;
    }

    public function getSalt()
    {
        // TODO: Implement getSalt() method.
        return null;
    }
}