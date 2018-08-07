<?php

namespace JoaoRobertoPB\PhpGitHookSniffer\Hooks;

use JoaoRobertoPB\PhpGitHookSniffer\Contracts\HookInterface;


abstract class BaseHook implements HookInterface
{
    /**
     * Retrieve commited files
     *
     * @return Array
     */
    public function retrieveCommitedFiles()
    {
        $output = array();

        exec('git diff --cached --name-only --diff-filter=ACMR', $output);

        return $output;
    }

    /**
     * Process git hook
     *
     * @return mixed
     */
    abstract public function process();
}
