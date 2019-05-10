<?php

namespace ContactBookBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Address
 *
 * @ORM\Table(name="address")
 * @ORM\Entity(repositoryClass="ContactBookBundle\Repository\AddressRepository")
 */
class Address
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
     * @ORM\Column(name="City", type="string", length=255)
     */
    private $city;

    /**
     * @var string
     *
     * @ORM\Column(name="Street", type="string", length=255)
     */
    private $street;

    /**
     * @var string
     *
     * @ORM\Column(name="StreetNumber", type="string", length=255)
     */
    private $streetNumber;

    /**
     * @var int
     *
     * @ORM\Column(name="UnitNumber", type="integer")
     */
    private $unitNumber;


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
     * Set city
     *
     * @param string $city
     *
     * @return Address
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set street
     *
     * @param string $street
     *
     * @return Address
     */
    public function setStreet($street)
    {
        $this->street = $street;

        return $this;
    }

    /**
     * Get street
     *
     * @return string
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * Set streetNumber
     *
     * @param string $streetNumber
     *
     * @return Address
     */
    public function setStreetNumber($streetNumber)
    {
        $this->streetNumber = $streetNumber;

        return $this;
    }

    /**
     * Get streetNumber
     *
     * @return string
     */
    public function getStreetNumber()
    {
        return $this->streetNumber;
    }

    /**
     * Set unitNumber
     *
     * @param integer $unitNumber
     *
     * @return Address
     */
    public function setUnitNumber($unitNumber)
    {
        $this->unitNumber = $unitNumber;

        return $this;
    }

    /**
     * Get unitNumber
     *
     * @return int
     */
    public function getUnitNumber()
    {
        return $this->unitNumber;
    }
}

