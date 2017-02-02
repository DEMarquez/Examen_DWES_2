<?php

namespace GfctBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Security\Core\Validator\Constraints as SecurityAssert;

/**
 * conf
 *
 * @ORM\Table(name="conf")
 * @ORM\Entity(repositoryClass="GfctBundle\Repository\confRepository")
 */
class conf
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="param", type="string", length=255)
     * @Assert\NotBlank()
     */
    private $param;

    /**
     * @var string
     *
     * @ORM\Column(name="configuracion", type="string", length=255)
     * @Assert\NotBlank()
     */
    private $configuracion;


    /**
     * @var string
     *
     *@ORM\Column(name="roles", type="json_array")
     */
     private $roles =array();


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set param
     *
     * @param string $param
     *
     * @return conf
     */
    public function setParam($param)
    {
        $this->param = $param;

        return $this;
    }

    /**
     * Get param
     *
     * @return string
     */
    public function getParam()
    {
        return $this->param;
    }

    /**
     * Set configuracion
     *
     * @param string $configuracion
     *
     * @return conf
     */
    public function setConfiguracion($configuracion)
    {
        $this->configuracion = $configuracion;

        return $this;
    }

    /**
     * Get configuracion
     *
     * @return string
     */
    public function getConfiguracion()
    {
        return $this->configuracion;
    }


    /**
     * Set roles
     *
     * @param string $roles
     *
     * @return User
     */
     public function setRoles(array $roles){
       $this->roles=$roles;

       //allows for chaining
       return $this;
     }

     public function getRoles(){
       return $this->roles;
     }

}
