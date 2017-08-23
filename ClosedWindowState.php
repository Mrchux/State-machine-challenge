<?php
class ClosedWindowState extends AbstractWindowState
{
    /**
     * @return OpenWindowState
     */
    public function open()
    {
        return new OpenWindowState;
    }
    /**
     * @return LockedWindowState
     */
    public function lock()
    {
        return new LockedWindowState;
    }
}