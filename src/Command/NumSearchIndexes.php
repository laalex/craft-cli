<?php

namespace CraftCli\Command;

use Symfony\Component\Console\Helper\ProgressBar;
use Symfony\Component\Console\Input\InputArgument;

class NumSearchIndexes extends Command
{
    /**
     * {@inheritdoc}
     */
    protected $name = 'searchindexes:number';

    /**
     * {@inheritdoc}
     */
    protected $description = 'Returns the number of current search indexes';

    /**
     * {@inheritdoc}
     */
    protected $showsDuration = true;

    /**
     * {@inheritdoc}
     */
    protected function getArguments()
    {
        return array(

        );
    }

    /**
     * {@inheritdoc}
     */
    protected function fire()
    {

        // Get all the element IDs ever
        $result = $this->craft->db->createCommand()
            ->select('id, type')
            ->from('elements')
            ->queryAll();

        $this->line(count($result));

    }
}
