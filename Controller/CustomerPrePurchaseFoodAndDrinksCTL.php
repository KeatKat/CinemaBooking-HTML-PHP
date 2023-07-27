<?php

include_once "Entity/FoodAndDrinksTransactions.php";

class CustomerPrePurchaseFoodAndDrinksCTL
{

	public function viewFoodAndDrinks()
	{
		$foodAndDrinks = new FoodAndDrinksTransactions();
		$result = $foodAndDrinks->getFoodAndDrinks();
		return $result;
	}

	public function viewFoodAndDrinksForPurchase()
	{
		$foodAndDrinks = new FoodAndDrinksTransactions();
		$result = $foodAndDrinks->getFoodAndDrinksForPurchase();
		return $result;
	}

	public function viewCinema()
	{
		$cinema = new FoodAndDrinksTransactions();
		$result = $cinema->getCinema();
		return $result;
	}

	public function createPurchaseFoodAndDrinks($username, $fDNAme, $fDQuantity, $cinema)
	{
		if ($fDQuantity == null) {
			return false;
		} else {
			$purchase = new FoodAndDrinksTransactions();
			$result = $purchase->insertPurchaseFoodAndDrinks($username, $fDNAme, $fDQuantity, $cinema);
			return $result;
		}
	}
}
