<?php

declare(strict_types=1);

namespace SomeWork\Minjust\Entity;

/**
 * @see \SomeWork\Minjust\Tests\Unit\Entity\LawyerTest
 */
class Lawyer
{
    /**
     * @var string
     */
    protected $fullName = '';

    /**
     * @var string
     */
    protected $registerNumber = '';

    /**
     * @var string
     */
    protected $certificateNumber = '';

    /**
     * @var string
     */
    protected $status = '';

    /**
     * @var Location
     */
    protected $location;

    /**
     * @var string
     */
    protected $url = '';

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @param string $url
     *
     * @return static
     */
    public function setUrl(string $url): self
    {
        $this->url = $url;

        return $this;
    }

    /**
     * @return string
     */
    public function getFullName(): string
    {
        return $this->fullName;
    }

    /**
     * @param string $fullName
     *
     * @return static
     */
    public function setFullName(string $fullName): self
    {
        $this->fullName = $fullName;

        return $this;
    }

    /**
     * @return string
     */
    public function getRegisterNumber(): string
    {
        return $this->registerNumber;
    }

    /**
     * @param string $registerNumber
     *
     * @return static
     */
    public function setRegisterNumber(string $registerNumber): self
    {
        $this->registerNumber = $registerNumber;

        return $this;
    }

    /**
     * @return string
     */
    public function getCertificateNumber(): string
    {
        return $this->certificateNumber;
    }

    /**
     * @param string $certificateNumber
     *
     * @return static
     */
    public function setCertificateNumber(string $certificateNumber): self
    {
        $this->certificateNumber = $certificateNumber;

        return $this;
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @param string $status
     *
     * @return static
     */
    public function setStatus(string $status): self
    {
        $this->status = $status;

        return $this;
    }

    /**
     * @return Location
     */
    public function getLocation(): Location
    {
        return $this->location;
    }

    /**
     * @param Location $location
     *
     * @return Lawyer
     */
    public function setLocation(Location $location): Lawyer
    {
        $this->location = $location;

        return $this;
    }
}
