<?php

namespace App\Controller;

class butta_bello
{
    //Extract Method
    function printOwing() {
        $this->printBanner();
        $this->printDetails($this->getOutstanding());
    }

    function printDetails($outstanding) {
        print("name:  " . $this->name);
        print("amount " . $outstanding);
    }

    //Inline Method
    function getRating() {
        return ($this->numberOfLateDeliveries > 5) ? 2 : 1;
    }

    //Extract Variable
    function extractVariable($platform, $browser){
        $isMacOs = $platform->toUpperCase()->indexOf("MAC") > -1;
        $isIE = $browser->toUpperCase()->indexOf("IE")  > -1;
        $wasResized = $this->resize > 0;

        if ($isMacOs && $isIE && $this->wasInitialized() && $wasResized) {
            // do something
        }
    }

    //Inline Temp
    function inlineTemp($anOrder){
        return $anOrder->basePrice() > 1000;
    }

    //Replace Temp with Query
    function replaceTempWithQuery(){
        if ($this->basePrice() > 1000) {
            return $this->basePrice() * 0.95;
        } else {
            return $this->basePrice() * 0.98;
        }
    }
    function basePrice() {
        return $this->quantity * $this->itemPrice;
    }

    //Split Temporary Variable
    function splitTemporaryVariable(){
        $perimeter = 2 * ($this->height + $this->width);
        echo $perimeter;
        $area = $this->height * $this->width;
        echo $area;
    }

    //Remove Assignments to Parameters
    function discount($inputVal, $quantity)
    {
        $result = $inputVal;
        if ($quantity > 50) {
            $result -= 2;
        }
        // do something
    }

    //Substitute Algorithm
    function foundPerson(array $people){
        foreach (["Don", "John", "Kent"] as $needle) {
            $id = array_search($needle, $people, true);
            if ($id !== false) {
                return $people[$id];
            }
        }
        return "";
    }
}

//Replace Method with Method Object
class Order {
    // ...
    public function price() {
        return (new PriceCalculator($this))->compute();
    }
}

class PriceCalculator {
    private $primaryBasePrice;
    private $secondaryBasePrice;
    private $tertiaryBasePrice;

    public function __construct(Order $order) {
        // Copy relevant information from the
        // order object.
    }

    public function compute() {
        // Perform long computation.
    }
}
//Introduce Foreign Method ?
class Report {
    // ...
    public function sendReport() {
        $paymentDate = self::nextWeek($this->previousDate);
        // ...
    }
    /**
     * Foreign method. Should be in Date.
     */
    private static function nextWeek(DateTime $arg) {
        $previousDate = clone $arg;
        return $previousDate->modify("+7 days");
    }
}
//Self Encapsulate Field
class SelfEncapsulateField{private $low;
    private $high;

    function includes($arg) {
        return $arg >= $this->getLow() && $arg <= $this->getHigh();
    }
    function getLow() {
        return $this->low;
    }
    function getHigh() {
        return $this->high;
    }
}
//Replace Conditional with Polymorphism
abstract class Bird {
    // ...
    abstract function getSpeed();
    // ...
}

class European extends Bird {
    public function getSpeed() {
        return $this->getBaseSpeed();
    }
}
class African extends Bird {
    public function getSpeed() {
        return $this->getBaseSpeed() - $this->getLoadFactor() * $this->numberOfCoconuts;
    }
}
class NorwegianBlue extends Bird {
    public function getSpeed() {
        return ($this->isNailed) ? 0 : $this->getBaseSpeed($this->voltage);
    }
}
class x {
    function y () {
        $speed = $bird->getSpeed();
    }
}
//Introduce Null Object
class NullCustomer extends Customer {
    public function isNull() {
        return true;
    }
    public function getPlan() {
        return new NullPlan();
    }
    // Some other NULL functionality.
}
class IntroduceNullObject {
    function x($customer) {
        $customer = ($order->customer !== null) ?
        $order->customer :
        new NullCustomer;

// Use Null-object as if it's normal subclass.
        $plan = $customer->getPlan();
    }
}
//Introduce Assertion
class IntroduceAssertion {
    function getExpenseLimit() {
    assert($this->expenseLimit !== NULL_EXPENSE || isset($this->primaryProject));

    return ($this->expenseLimit !== NULL_EXPENSE) ?
        $this->expenseLimit:
        $this->primaryProject->getMemberExpenseLimit();
    }
}
