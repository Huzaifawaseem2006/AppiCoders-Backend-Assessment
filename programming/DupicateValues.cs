public class DuplicateValues
{
    public static void FindDuplicates(int[] numbers)
    {
        for (int i = 0; i < numbers.Length; i++)
        {
            for (int j = i + 1; j < numbers.Length; j++)
            {
                if (numbers[i] == numbers[j])
                {
                    Console.WriteLine(numbers[i]);
                    break;
                }
            }
        }
    }
}