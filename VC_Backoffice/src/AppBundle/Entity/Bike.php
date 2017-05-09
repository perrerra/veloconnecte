<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bike
 *
 * @ORM\Table(name="bike")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\BikeRepository")
 */
class Bike
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
     * @ORM\Column(name="name", type="string", length=255, unique=true)
     */
    private $name;

    /**
     * @var int
     *
     * @ORM\Column(name="type", type="integer")
     */
    private $type;

    /**
     * @var int
     *
     * @ORM\Column(name="wheelSize", type="integer")
     */
    private $wheelSize;

    /**
     * @ORM\ManyToOne(targetEntity="Person", inversedBy="bikes")
     * @ORM\JoinColumn(name="person_id", referencedColumnName="id")
     */
    private $person;

    /**
     * @ORM\OneToMany(targetEntity="Ride", mappedBy="bike")
     */
    private $rides;

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
     * Set name
     *
     * @param string $name
     *
     * @return Bike
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set type
     *
     * @param integer $type
     *
     * @return Bike
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set wheelSize
     *
     * @param integer $wheelSize
     *
     * @return Bike
     */
    public function setWheelSize($wheelSize)
    {
        $this->wheelSize = $wheelSize;

        return $this;
    }

    /**
     * Get wheelSize
     *
     * @return int
     */
    public function getWheelSize()
    {
        return $this->wheelSize;
    }
}
