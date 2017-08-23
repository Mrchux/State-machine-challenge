<?php
/**
*   Finite State Class for an automatic Window
*   @ChuxAnyirah
*/
class Window
{
    /**
     * @var WindowState
     */
    private $state;
    public function __construct(WindowState $state)
    {
        $this->setState($state);
    }
    /**
     * @throws IllegalStateTransitionException
     */
    public function open()
    {
        $this->setState($this->state->open());
    }
    /**
     * @throws IllegalStateTransitionException
     */
    public function close()
    {
        $this->setState($this->state->close());
    }
    /**
     * @throws IllegalStateTransitionException
     */
    public function lock()
    {
        $this->setState($this->state->lock());
    }
    /**
     * @throws IllegalStateTransitionException
     */
    public function unlock()
    {
        $this->setState($this->state->unlock());
    }
    /**
     * @return bool
     */
    public function isOpen()
    {
        return $this->state instanceof OpenWindowState;
    }
    /**
     * @return bool
     */
    public function isClosed()
    {
        return $this->state instanceof ClosedWindowState;
    }
    /**
     * @return bool
     */
    public function isLocked()
    {
        return $this->state instanceof LockedWindowState;
    }
    private function setState(WindowState $state)
    {
        $this->state = $state;
    }
}