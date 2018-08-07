<?php

namespace JoaoRobertoPB\PhpGitHookSniffer\Contracts;

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
