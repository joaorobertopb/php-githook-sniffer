<?php

namespace JoaoRobertoPB\PhpGitHookSniffer\Hooks;

use JoaoRobertoPB\PhpGitHookSniffer\Pipelines\CsFixerStage;
use JoaoRobertoPB\PhpGitHookSniffer\Pipelines\LintStage;
use League\Pipeline\Pipeline;

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
