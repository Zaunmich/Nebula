<?php

namespace Kanboard\Plugin\Nebula;

use Kanboard\Core\Plugin\Base;

class Plugin extends Base
{

    public function initialize()
    {
        global $themeNebulaConfig;

        if (file_exists(DATA_DIR . '/files/Nebula/config.php')) 
        {
            require_once(DATA_DIR . '/files/Nebula/config.php');
        } else { 
            mkdir(DATA_DIR . '/files/Nebula/Assets/images', 0755, true); 
            copy('plugins/Nebula/config.php', DATA_DIR . '/files/Nebula/config.php');
            copy('plugins/Nebula/Assets/images/brand-logo.png', DATA_DIR . '/files/Nebula/Assets/images/brand-logo.png');
        }

        if (file_exists('plugins/Customizer')) 
		{
            $this->template->setTemplateOverride('header/title', 'Nebula:layout/header/customizerTitle');
            $this->template->setTemplateOverride('layout', 'Nebula:layout');
            $this->template->setTemplateOverride('header/creation_dropdown', 'Nebula:layout/header/creation_dropdown');
		}
        elseif (isset($themeNebulaConfig['logo'])) 
        {
            $this->template->setTemplateOverride('header/title', 'Nebula:layout/header/title');
            $this->template->setTemplateOverride('layout', 'Nebula:layout');
            $this->template->setTemplateOverride('header/creation_dropdown', 'Nebula:layout/header/creation_dropdown');
            // for the adaptive line-thickness depending on the task priority
            $this->template->setTemplateOverride('board/task_private', 'Nebula:board/task_private');
        }
		
        $this->hook->on("template:layout:css", array("template" => "plugins/Nebula/Assets/css/nebula.css"));

        $this->hook->on("template:layout:css", array("template" => "plugins/Nebula/Assets/css/prism.css"));

        $this->hook->on('template:layout:js', array('template' => 'plugins/Nebula/Assets/js/clipboard.min.js'));

        $this->hook->on('template:layout:js', array('template' => 'plugins/Nebula/Assets/js/prism.js'));

        $this->hook->on('template:layout:js', array('template' => 'plugins/Nebula/Assets/js/nebula.js'));
    }

    public function getPluginName()
    {
        return 'Nebula';
    }

    public function getPluginDescription()
    {
        return t('This theme allows you to add special features like replacing the logo and adds syntax highlighting for Markdown code.');
    }

    public function getPluginAuthor()
    {
        return 'Valentino Pesce + Michael Zauner';
    }

    public function getPluginVersion()
    {
        return '2.0.0'; 
    }

    public function getCompatibleVersion()
    {
        return '>=1.0.48';
    }

    public function getPluginHomepage()
    {
        return 'https://github.com/Zaunmich/Nebula';
    }

}
