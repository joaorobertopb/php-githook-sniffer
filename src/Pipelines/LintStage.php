<?php

namespace JoaoRobertoPB\PhpGitHookSniffer\Pipelines;

use JoaoRobertoPB\PhpGitHookSniffer\Contracts\PipelineInterface;

class LintStage implements PipelineInterface
{
    /**
     * Process the payload.
     *
     * @param mixed $payload
     */
    public function __invoke($payload)
    {
        echo "[  ] ----- Check Syntax Error -----\n";

        foreach ($payload as $file) {
            $fileName = trim($file);
            $ext = pathinfo($fileName, PATHINFO_EXTENSION);

            $return = 0;

            if ("php" != $ext) {
                continue;
            }

            $lintOutput = array();
            exec("php -l " . escapeshellarg($fileName), $lintOutput, $return);
        }

        if ($return != 0) {
            echo implode("\n", $lintOutput), "\n";
            echo "[FAIL] ----- Check Syntax Error -----\n";
            exit(1);
        }

        echo "[OK] ----- Check Syntax Error -----\n";

        return $payload;
    }
}
