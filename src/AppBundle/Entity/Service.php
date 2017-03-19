<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Service
 *
 * @ORM\Table(name="service")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ServiceRepository")
 */
class Service
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
     * @ORM\Column(name="service_name", type="string", length=255, unique=true)
     */
    private $serviceName;

    /**
     * @var string
     *
     * @ORM\Column(name="service_price", type="string", length=255)
     */
    private $servicePrice;

    /**
     * @var string
     *
     * @ORM\Column(name="service_duration", type="string", length=255)
     */
    private $serviceDuration;


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
     * Set serviceName
     *
     * @param string $serviceName
     *
     * @return Service
     */
    public function setServiceName($serviceName)
    {
        $this->serviceName = $serviceName;

        return $this;
    }

    /**
     * Get serviceName
     *
     * @return string
     */
    public function getServiceName()
    {
        return $this->serviceName;
    }

    /**
     * Set servicePrice
     *
     * @param string $servicePrice
     *
     * @return Service
     */
    public function setServicePrice($servicePrice)
    {
        $this->servicePrice = $servicePrice;

        return $this;
    }

    /**
     * Get servicePrice
     *
     * @return string
     */
    public function getServicePrice()
    {
        return $this->servicePrice;
    }

    /**
     * Set serviceDuration
     *
     * @param string $serviceDuration
     *
     * @return Service
     */
    public function setServiceDuration($serviceDuration)
    {
        $this->serviceDuration = $serviceDuration;

        return $this;
    }

    /**
     * Get serviceDuration
     *
     * @return string
     */
    public function getServiceDuration()
    {
        return $this->serviceDuration;
    }
}

