<?php declare(strict_types=1);

namespace Trefle\Model\Species;

class Distributions
{
    /** @var Distribution[] */
    private array $native;
    /** @var Distribution[] */
    private array $introduced;
    /** @var Distribution[] */
    private array $doubtful;
    /** @var Distribution[] */
    private array $absent;
    /** @var Distribution[] */
    private array $extinct;

    public function __construct(array $native, array $introduced, array $doubtful, array $absent, array $extinct)
    {
        $this->native     = $native;
        $this->introduced = $introduced;
        $this->doubtful   = $doubtful;
        $this->absent     = $absent;
        $this->extinct    = $extinct;
    }

    /**
     * @return Distribution[]
     */
    public function getNative(): array
    {
        return $this->native;
    }

    /**
     * @return Distribution[]
     */
    public function getIntroduced(): array
    {
        return $this->introduced;
    }

    /**
     * @return Distribution[]
     */
    public function getDoubtful(): array
    {
        return $this->doubtful;
    }

    /**
     * @return Distribution[]
     */
    public function getAbsent(): array
    {
        return $this->absent;
    }

    /**
     * @return Distribution[]
     */
    public function getExtinct(): array
    {
        return $this->extinct;
    }
}
