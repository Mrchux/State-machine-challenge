<?php
class LockedWindowState extends AbstractWindowState
{
    /**
     * @return ClosedWindowState
     */
    public function unlock()
    {
        return new ClosedWindowState;
    }
}