<?php
/* BlockLangCurrency
        PrestaShop Module 

@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@%#*++++*#%@@@@@@@@@@@@@@@@@@@@@
@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@#-. .:--==-::. .-#@@@@@@@@@@@@@@@@@
@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@%: .=%@@@@@@@@@@@@#=. :%@@@@@@@@@@@@@@
@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@%  =@@@@@@@@@@@@@@@@@@@@=  %@@@@@@@@@@@@
@@@@@@@@@@                               @@@@@@@@@@@@@@@@@@: +@@@@@@@@@@@@@@@@@@@@@@@@= :@@@@@@@@@@@
@@@@@@@@@@     Hacked By                 @@@@@@@@@@@@@@@@@  @@@@@%+%@@@@@@@@@@@@#*@@@@@@  @@@@@@@@@@
@@@@@@@@@@                               @@@@@@@@@@@@@@@@ :@@@@@@@* :@@@@@@@@@#..%@@@@@@@. @@@@@@@@@
@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ .@@@@@@+:=*= -@@@@@%. =+-=%@@@@@@  @@@@@@@@
@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@* @@@@@@     :@: =@%: +#     +@@@@@@ *@@@@@@@
@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ +@@@@@@      @@%...-@@-     .@@@@@@= @@@@@@@
@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ @@@@@@@%.  .#@@@@@@@@@@-   -@@@@@@@@ @@@@@@@
@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@% @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ %@@@@@@
@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@% @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ %@@@@@@
@@@@@@@                                      @@@@@@@@@@ %@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@% @@@@@@@
@@@@@@@             Hieloiceberg             @@@@@@@@@@ .@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@:.@@@@@@@
@@@@@@@                                      @@@@@@@@@@@ %@@@@@*+=---::::::::::----=*%@@@@@ @@@@@@@@
@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@= @@@- +#%@@@@@@@@@@@@@@@@%#*:.@@@ =@@@@@@@@
@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@: @@+:+*#%%@@@@@@@@@@@@@%##+--@@ -@@@@@@@@@
@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@- *@@@#+==------------==+*%@@* +@@@@@@@@@@
@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@# .%@@@@@@@@@@@@@@@@@@@@@@%. %@@@@@@@@@@@
@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@+ .+@@@@@@@@@@@@@@@@@@+. +@@@@@@@@@@@@@
@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@#: .=*%@@@@@@@@%*-. :#@@@@@@@@@@@@@@@
@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@#=:.  .......:+%@@@@@@@@@@@@@@@@@@
@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@     


*/

class Blocklangcurr extends Module
{
	function __construct()
	{
		$this->name = 'blocklangcurr';
		$this->tab = 'Blocks';
		$this->version = 0.7;

		parent::__construct();

		/* The parent construct is required for translations */
		$this->page = basename(__FILE__, '.php');
		$this->displayName = $this->l('Language and Currency block');
		$this->description = $this->l('Adds a block for selecting a language and Currency');
	}

	function install()
	{
		if (!parent::install())
			return false;
		if (!$this->registerHook('footer'))
			return false;
		return true;
	}

	/**
	* Returns module content for header
	*
	* @param array $params Parameters
	* @return string Content
	*/
	function hookFooter($params)
	{
		global $smarty;
		$languages = Language::getLanguages();
		if (!sizeof($languages))
			return '';
		$smarty->assign('languages', $languages);
		return $this->display(__FILE__, 'blocklangcurr.tpl');
	}
	
	function hookTop($params)
	{
		return $this->hookFooter($params);
	}

}

?>
