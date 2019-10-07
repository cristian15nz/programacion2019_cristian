using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace AplicacionConsola
{
    class Program
    {
        static void Main(string[] args)
        {
            Console.WriteLine("Hola a todos");

            for (var i = 1; i < 10; i++)
            {
                Console.WriteLine(i + "\n");
            }

            Console.ReadLine();
        }
    }
}
