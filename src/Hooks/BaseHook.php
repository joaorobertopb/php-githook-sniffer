<?php

namespace EspecializaTI\PhpGitHookSniffer\Hooks;

use EspecializaTI\PhpGitHookSniffer\Contracts\HookInterface;

/**
 * Class BaseHook
 * @package EspecializaTI\Hooks
 */
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
