<?php
namespace Galt\Bundle\MainBundle\Entity;

use FOS\UserBundle\Entity\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
* @ORM\Entity
* @ORM\Table(name="fos_user")
*/
class Person extends BaseUser
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct();
        $this->tickets = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * @ORM\OneToMany(targetEntity="Galt\Bundle\TicketBundle\Entity\Ticket", mappedBy="assigned")
     */
    protected $tickets;


    /**
     * @ORM\OneToMany(targetEntity="Galt\Bundle\TicketBundle\Entity\Ticket", mappedBy="persons")
     */
    protected $authored;


    /**
     * Set tickets
     *
     * @param \Galt\Bundle\TicketBundle\Entity\Ticket $tickets
     * @return Person
     */
    public function setTickets(\Galt\Bundle\TicketBundle\Entity\Ticket $tickets = null)
    {
        $this->tickets = $tickets;

        return $this;
    }

    /**
     * Get tickets
     *
     * @return \Galt\Bundle\TicketBundle\Entity\Ticket 
     */
    public function getTickets()
    {
        return $this->tickets;
    }

    /**
     * Set authored
     *
     * @param \Galt\Bundle\TicketBundle\Entity\Ticket $authored
     * @return Person
     */
    public function setAuthored(\Galt\Bundle\TicketBundle\Entity\Ticket $authored = null)
    {
        $this->authored = $authored;

        return $this;
    }

    /**
     * Get authored
     *
     * @return \Galt\Bundle\TicketBundle\Entity\Ticket 
     */
    public function getAuthored()
    {
        return $this->authored;
    }

    /**
     * Add tickets
     *
     * @param \Galt\Bundle\TicketBundle\Entity\Ticket $tickets
     * @return Person
     */
    public function addTicket(\Galt\Bundle\TicketBundle\Entity\Ticket $tickets)
    {
        $this->tickets[] = $tickets;

        return $this;
    }

    /**
     * Remove tickets
     *
     * @param \Galt\Bundle\TicketBundle\Entity\Ticket $tickets
     */
    public function removeTicket(\Galt\Bundle\TicketBundle\Entity\Ticket $tickets)
    {
        $this->tickets->removeElement($tickets);
    }

    /**
     * Add authored
     *
     * @param \Galt\Bundle\TicketBundle\Entity\Ticket $authored
     * @return Person
     */
    public function addAuthored(\Galt\Bundle\TicketBundle\Entity\Ticket $authored)
    {
        $this->authored[] = $authored;

        return $this;
    }

    /**
     * Remove authored
     *
     * @param \Galt\Bundle\TicketBundle\Entity\Ticket $authored
     */
    public function removeAuthored(\Galt\Bundle\TicketBundle\Entity\Ticket $authored)
    {
        $this->authored->removeElement($authored);
    }
}
