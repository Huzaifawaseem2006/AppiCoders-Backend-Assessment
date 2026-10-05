public class ReverseString
{
    public static void Reverse(string text)
    {
        string reversed = "";

        for (int i = text.Length - 1; i >= 0; i--)
        {
            reversed += text[i];
        }

        Console.WriteLine(reversed);
    }
}