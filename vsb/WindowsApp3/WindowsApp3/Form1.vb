Public Class Form1

    Private Sub login_Click_1(sender As Object, e As EventArgs) Handles login.Click
        If String.Equals(nama.Text, "monyet", StringComparison.OrdinalIgnoreCase) And String.Equals(password.Text, "pisang", StringComparison.OrdinalIgnoreCase) Then
            Form2.Show()
            Me.Hide()
        Else
            MessageBox.Show("Anda bukan monyet asli")
        End If
    End Sub

    Private Sub nama_TextChanged_1(sender As Object, e As EventArgs) Handles nama.TextChanged

    End Sub
End Class
