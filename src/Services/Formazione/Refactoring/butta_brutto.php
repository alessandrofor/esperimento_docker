<?php

namespace App\Controller;

class buttaBrutto
{
    //Extract Method
    function printOwing() {
        $this->printBanner();

        // Print details.
        print("name:  " . $this->name);
        print("amount " . $this->getOutstanding());
    }

    //Inline Method
    function getRating() {
        return ($this->moreThanFiveLateDeliveries()) ? 2 : 1;
    }
    function moreThanFiveLateDeliveries() {
        return $this->numberOfLateDeliveries > 5;
    }

    //Extract Variable
    function extractVariable($platform, $browser){
        if (($platform->toUpperCase()->indexOf("MAC") > -1) &&
            ($browser->toUpperCase()->indexOf("IE") > -1) &&
            $this->wasInitialized() && $this->resize > 0)
        {
            // do something
        }
    }

    //Inline Temp
    function inlineTemp($anOrder){
        $basePrice = $anOrder->basePrice();
        return $basePrice > 1000;
    }

    //Replace Temp with Query
    function replaceTempWithQuery(){
        $basePrice = $this->quantity * $this->itemPrice;
        if ($basePrice > 1000) {
            return $basePrice * 0.95;
        } else {
            return $basePrice * 0.98;
        }
    }

    //Split Temporary Variable
    function splitTemporaryVariable(){
        $temp = 2 * ($this->height + $this->width);
        echo $temp;
        $temp = $this->height * $this->width;
        echo $temp;
    }

    //Remove Assignments to Parameters
    function discount($inputVal, $quantity)
    {
        if ($quantity > 50) {
            $inputVal -= 2;
        }
        // do something
    }

    //Substitute Algorithm
    function foundPerson(array $people){
        for ($i = 0; $i < count($people); $i++) {
            if ($people[$i] === "Don") {
                return "Don";
            }
            if ($people[$i] === "John") {
                return "John";
            }
            if ($people[$i] === "Kent") {
                return "Kent";
            }
        }
        return "";
    }
}

//Replace Method with Method Object
class Order {
    // ...
    public function price() {
        $primaryBasePrice = 10;
        $secondaryBasePrice = 20;
        $tertiaryBasePrice = 30;
        // Perform long computation.
    }
}
//Introduce Foreign Method ?
class Report {
    // ...
    public function sendReport() {
        $previousDate = clone $this->previousDate;
        $paymentDate = $previousDate->modify("+7 days");
        // ...
    }
}
//Self Encapsulate Field
class SelfEncapsulateField{
    private $low;
    private $high;

    function includes($arg) {
        return $arg >= $this->low && $arg <= $this->high;
    }
}
//Replace Conditional with Polymorphism
class Bird {
    // ...
    public function getSpeed() {
        switch ($this->type) {
            case EUROPEAN:
                return $this->getBaseSpeed();
            case AFRICAN:
                return $this->getBaseSpeed() - $this->getLoadFactor() * $this->numberOfCoconuts;
            case NORWEGIAN_BLUE:
                return ($this->isNailed) ? 0 : $this->getBaseSpeed($this->voltage);
        }
        throw new Exception("Should be unreachable");
    }
    // ...
}
//Introduce Null Object
class IntroduceNullObject {
    function x($customer) {
        if ($customer === null) {
            $plan = BillingPlan::basic();
        } else {
            $plan = $customer->getPlan();
        }
    }
}
//Introduce Assertion
class IntroduceAssertion {
    function getExpenseLimit() {
    // Should have either expense limit or
    // a primary project.
    return ($this->expenseLimit !== NULL_EXPENSE) ?
        $this->expenseLimit:
        $this->primaryProject->getMemberExpenseLimit();
    }
}


