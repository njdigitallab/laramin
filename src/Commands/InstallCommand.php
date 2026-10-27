<?php

namespace NjDigitalLab\Laramin\Commands;

use Illuminate\Console\Attributes\Description;
use Illuminate\Console\Attributes\Signature;
use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Facades\File;
use NjDigitalLab\Laramin\Laramin;

#[Signature('laramin:install {directory=none}')]
#[Description('Install the Laramin template.')]
class InstallCommand extends Command
{
    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Installing Laramin template... please wait...');

        File::copyDirectory($this->getViewStubsPath(), $this->getDirectoryToPutViewsIn());

        File::copyDirectory($this->getCssStubsPath(), $this->getDirectoryToPutStylesheetsIn());

        File::copyDirectory($this->getJsStubsPath(), $this->getDirectoryToPutScriptsIn());

        $this->info('Installation complete!');
    }

    /**
     * Get the view stubs path.
     */
    protected function getViewStubsPath(): string
    {
        return Laramin::getStubsPath('views');
    }

    /**
     * Get the css stubs path.
     */
    protected function getCssStubsPath(): string
    {
        return Laramin::getStubsPath('css');
    }

    /**
     * Get the js stubs path.
     */
    protected function getJsStubsPath(): string
    {
        return Laramin::getStubsPath('js');
    }

    /**
     * Get the directory to put the views in.
     */
    protected function getDirectoryToPutViewsIn(): string
    {
        return $this->getDirectoryToPutFilesIn(resource_path('views'));
    }

    /**
     * Get the directory to put the stylesheet in.
     */
    protected function getDirectoryToPutStylesheetsIn(): string
    {
        return $this->getDirectoryToPutFilesIn(resource_path('css'));
    }

    /**
     * Get the directory to put the scripts in.
     */
    protected function getDirectoryToPutScriptsIn(): string
    {
        return $this->getDirectoryToPutFilesIn(resource_path('js'));
    }

    /**
     * Get the directory to put the files in.
     */
    protected function getDirectoryToPutFilesIn(string $path): string
    {
        $relativePath = $this->argument('directory');

        if ($relativePath == 'none') {
            return $path;
        }

        return $path.'/'.$relativePath;
    }
}
