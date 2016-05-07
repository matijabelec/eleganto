<?php

namespace app\console\commands;

use mako\reactor\Command;

/**
 * DbInit command.
 */
class DbInit extends Command
{
    /**
     * Command information.
     *
     * @var array
     */
    protected $commandInformation =
    [
        'description' => 'Creates default DB users and groups.'
    ];

    /**
     * Creates default DB users and groups.
     *
     * @access  public
     */
    public function execute()
    {
        // check if user already exists
        if($this->gatekeeper->getUserProvider()->getByUsername('root') ) {
            $this->write('<yellow>Root user already exists in DB! Aborted.</yellow>');
            return;
        }
        
        // create "root" user
        $user = $this->gatekeeper->createUser('matijabelec1@gmail.com', 'root', 'belec1', true);
        
        // create group
        if(!$this->gatekeeper->createGroup('superadmin')->addUser($user) ) {
            $this->write('<red>Error on adding group "superadmin" to DB!</red>');
            return;
        }
        
        $this->write('<green>Default DB users and groups successfully initialized!</green>');
    }
}
