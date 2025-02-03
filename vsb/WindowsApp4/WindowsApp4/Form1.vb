Public Class Form1
    Private Sub Button1_Click(sender As Object, e As EventArgs) Handles Button1.Click
        Dim x, y, z As Integer

        x = angka1.Text
        y = angka2.Text
        For z = x To y
            MessageBox.Show(z, " ")
        Next


    End Sub
End Class
