<?php

namespace EspecializaTI\PhpGitHookSniffer\Contracts;

/**
 * Interface HookInterface
 * @package EspecializaTI\Contracts
 */
interface HookInterface
{
    /**
     * Retrieve commited files
     *
     * @return Array
     */
    public function retrieveCommitedFiles();

    /**
    * Process git hook
    *
    * @return mixed
    */
    public function process();
}
