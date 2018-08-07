<?php

namespace JoaoRobertoPB\PhpGitHookSniffer\Pipelines;

use JoaoRobertoPB\PhpGitHookSniffer\Contracts\PipelineInterface;

class CsFixerStage implements PipelineInterface
{
    /**
     * Runs php -l on PHP staged files.
     *
     *
     * @return void
     */
    public function __invoke($payload)
    {
        echo "[  ] ----- Fix Code Standards -----\n";

        foreach ($payload as $file) {
            $fileName = trim($file);
            $ext = pathinfo($fileName, PATHINFO_EXTENSION);

            $return = 0;

            if ("php" != $ext) {
                continue;
            }

            $csOutput = array();
            exec(__DIR__ . "/../../../../../vendor/bin/php-cs-fixer --using-cache=no fix " . escapeshellarg($fileName), $csOutput, $return);
            exec("git add {$fileName}");
        }

        if ($return != 0) {
            echo implode("\n", $csOutput), "\n";
            echo "[FAIL] ----- Fix Code Standards -----\n";
            exit(1);
        }

        echo "[OK] ----- Fix Code Standards -----\n";

        return $payload;
    }
}
