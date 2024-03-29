﻿using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace Movimiento
{
    public partial class Form1 : Form
    {
        public bool mouseActivado = false;

        public Form1()
        {
            InitializeComponent();
        }

        private void Form1_KeyDown(object sender, KeyEventArgs e)
        {
            // Obtener el valor de la tecla
            var keyValue = e.KeyValue;

            var posicionX = label2.Location.X;
            var posicionY = label2.Location.Y;

            // Reset
            if (keyValue == 82)
            {
                /* Centrado relativo al padre */
                var anchoPadre = label1.Width;
                var anchoHijo = label2.Width;
                var margenX = label1.Location.X;

                var centroX = ((anchoPadre + anchoHijo) / 2) - margenX;

                var alturaPadre = label1.Height;
                var alturaHijo = label2.Height;
                var margenY = label1.Location.Y;

                var centroY = ((alturaPadre + alturaHijo) / 2) - margenY;

                /* Centrado absoluto (al formulario) */
                anchoPadre = this.Width; 
                anchoHijo = label2.Width;
              
                alturaPadre = this.Height;
                alturaHijo = label2.Height;

                // Bordes
                var bordeX = 18;
                var bordeY = 47;

                centroX = (anchoPadre / 2) - (anchoHijo / 2) - bordeX;
                centroY = (alturaPadre / 2) - (alturaHijo / 2) - bordeY;

                MessageBox.Show("Reseting game...");
                label2.Location = new System.Drawing.Point(centroX, centroY);
            }

            // Cambiar color
            if (keyValue == 67)
            {
                //MessageBox.Show("Cambiando color.");

                var random = new Random();

                var numeroAleatorio = random.Next(0, 4);

                // Listado de colores
                Color[] colores = {Color.Blue, Color.Red, Color.Green, Color.Pink, Color.Peru};

                label2.BackColor = colores[numeroAleatorio];

                // Colores en RGB
                var red = random.Next(255);
                var green = random.Next(255);
                var blue = random.Next(255);

                label2.BackColor = Color.FromArgb(red, green, blue);
            }

            // Activar el movimiento con el mouse
            if (keyValue == 77) {     

                // Si está activo
                if (mouseActivado)
                {
                    MessageBox.Show("Desactivando movimiento con el mouse");

                    mouseActivado = false;

                    lblFlag.Text = "Desactivado";
                }
                else
                {
                    MessageBox.Show("Activando movimiento con el mouse");

                    mouseActivado = true;

                    lblFlag.Text = "Activado";
                }
            }

            // Izquierda
            if (keyValue == 37 || keyValue == 65)
            {
                if (posicionX <= 15)
                {
                    return;
                }
              
                label2.Location = new System.Drawing.Point(posicionX - 1, posicionY);
                label3.Text = label2.Location.ToString();
                
            }

            // Arriba
            if (keyValue == 38)
            {
                label2.Location = new System.Drawing.Point(posicionX, posicionY - 1);
                label3.Text = label2.Location.ToString();
            }

            // Derecha
            if (keyValue == 39)
            {
                if (posicionX >= 335)
                {
                    return;
                }
                
                label2.Location = new System.Drawing.Point(posicionX + 1, posicionY);
                label3.Text = label2.Location.ToString();
                                
            }

            // Abajo
            if (keyValue == 40)
            {
                label2.Location = new System.Drawing.Point(posicionX, posicionY + 1);
                label3.Text = label2.Location.ToString();
            }


            // Aumentar de tamaño con la tecla [+]
            if (keyValue == 107)
            {   // Limitar que el tamaño maximo sea 200
                if (label2.Width < 200)
                {
                    label2.Width += 5;
                    label2.Height += 5;
                }
                
            }

            // Disminuir de tamaño con la tecla [-]
            if (keyValue == 109)
            {
                if (label2.Width > 10)
                {
                    label2.Width -= 5;
                    label2.Height -= 5;
                }
                
            }
        }

        private void label2_Click(object sender, EventArgs e)
        {

        }

        private void Form1_Load(object sender, EventArgs e)
        {

        }

        private void label1_MouseMove(object sender, MouseEventArgs e)
        {
            //MessageBox.Show("Te estas moviendo");

            if (mouseActivado)
            {
                var locationX = e.Location.X;
                var locationY = e.Location.Y;

                label2.Location = new System.Drawing.Point(locationX, locationY);

            }

            //System.Diagnostics.Trace.WriteLine(location);
        }

        private void label2_MouseMove(object sender, MouseEventArgs e)
        {
            
        }
    }
}
