# Project Euler #1
#### Project Euler #1 is easiest problem in the Project Euler, just you must see the question! You will solve it without losing any time!

# Question & Solving
### Question: 
#### If we list all the natural numbers below 10 that are multiples of 3 or 5, we get 3, 5, and 6, The sum of these multiples is 32.
#### Find the sum of all the multiples of 3 or 5 below 1000.
### Solving:
#### We will solve this question with Brute Forcing technique with Programming Languages

<pre>
// C++
int main()
{
  int relust = 0;
  for (int i = 1; i < 1000; i++)
  {
    if (((i % 3) == 0) || ((i % 5) == 0)) 
    {  
      result += i;
    }
  }
  std::cout << "The result is: " << result;
}
</pre>

<pre>
# Python
  relust = 0
  for i < range(1000):
    if ((i % 3) == 0) or ((i % 5) == 0): 
      result += i
  print(result)
</pre>

<pre>
// PHP
  $result = 0;
  for ($i = 0; $i < 1000; $i++)
  {
    if ((($i % 3) == 0) || (($i % 5) == 0))
    {
      $result = $result + $i;
    }
  }
  echo "The result is: " . $result;
</pre>

<pre>
// Javascript
  let result = 0;
  for (let i = 0; i < 1000; i++)
  {
    if (((i % 3) == 0) || ((i % 5) == 0))
    {
      result += i;
    }
  }
  console.log("The result is: " + result);
</pre>

#### That is very easy! Yeap?
#### I've attached some files (.cpp - .py - .php - .js) for your easy access!
#### I hope you enjoy! See you later!
