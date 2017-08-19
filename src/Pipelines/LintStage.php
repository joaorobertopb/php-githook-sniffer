<?php

namespace EspecializaTI\PhpGitHookSniffer\Pipelines;

use EspecializaTI\PhpGitHookSniffer\Contracts\PipelineInterface;

/**
 * Class LintStage
 * @package EspecializaTI\Pipelines
 */
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
