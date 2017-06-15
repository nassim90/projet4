<?php

namespace LA\FormBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reservation
 *
 * @ORM\Table(name="reservation")
 * @ORM\Entity(repositoryClass="LA\FormBundle\Repository\ReservationRepository")
 */
class Reservation
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
     * @var \DateTime
     *
     * @ORM\Column(name="dateRes", type="datetime")
     */
    private $dateRes;

    /**
     * @var float
     *
     * @ORM\Column(name="billetNb", type="float")
     */
    private $billetNb;

    /**
     * @var int
     *
     * @ORM\Column(name="prixRes", type="integer")
     */
    private $prixRes;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=30)
     */
    private $email;


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
     * Set dateRes
     *
     * @param \DateTime $dateRes
     *
     * @return Reservation
     */
    public function setDateRes($dateRes)
    {
        $this->dateRes = $dateRes;

        return $this;
    }

    /**
     * Get dateRes
     *
     * @return \DateTime
     */
    public function getDateRes()
    {
        return $this->dateRes;
    }

    /**
     * Set billetNb
     *
     * @param float $billetNb
     *
     * @return Reservation
     */
    public function setBilletNb($billetNb)
    {
        $this->billetNb = $billetNb;

        return $this;
    }

    /**
     * Get billetNb
     *
     * @return float
     */
    public function getBilletNb()
    {
        return $this->billetNb;
    }

    /**
     * Set prixRes
     *
     * @param integer $prixRes
     *
     * @return Reservation
     */
    public function setPrixRes($prixRes)
    {
        $this->prixRes = $prixRes;

        return $this;
    }

    /**
     * Get prixRes
     *
     * @return int
     */
    public function getPrixRes()
    {
        return $this->prixRes;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Reservation
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }
}

