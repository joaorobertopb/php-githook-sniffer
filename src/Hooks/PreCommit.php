<?php

namespace EspecializaTI\PhpGitHookSniffer\Hooks;

use EspecializaTI\PhpGitHookSniffer\Pipelines\CsFixerStage;
use EspecializaTI\PhpGitHookSniffer\Pipelines\LintStage;
use League\Pipeline\Pipeline;

/**
 * Class PreCommit
 * @package EspecializaTI\Hooks
 */
class PreCommit extends BaseHook
{
    /**
     * Process pre-commit git hook
     *
     * @return void
     */
    public function process()
    {
        echo "\n----- Start Pre-Commit Hook -----\n";

        $files = $this->retrieveCommitedFiles();

        $pipeline = (new Pipeline)
            ->pipe(new LintStage)
            ->pipe(new CsFixerStage);

        $pipeline->process($files);

        echo "----- Finish Pre-Commit Hook -----\n\n";
    }
}
