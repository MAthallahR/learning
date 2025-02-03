Public Class Form1
    Dim X As Integer
    Dim y As Integer
    Dim z As Integer

    Private Sub Button1_Click(sender As Object, e As EventArgs) Handles Button1.Click
        X = TextBox1.Text
        y = TextBox2.Text

        If RadioButton3.Checked Then
            z = X + y
            MessageBox.Show(z, "Result", MessageBoxButtons.OK, MessageBoxIcon.Information)
        End If

        If RadioButton2.Checked Then
            z = X - y
            MessageBox.Show(z, "Result", MessageBoxButtons.OK, MessageBoxIcon.Information)
        End If

        If RadioButton1.Checked Then
            z = X * y
            MessageBox.Show(z, "Result", MessageBoxButtons.OK, MessageBoxIcon.Information)
        End If

        If RadioButton4.Checked Then
            z = X / y
            MessageBox.Show(z, "Result", MessageBoxButtons.OK, MessageBoxIcon.Information)
        End If

    End Sub

    Private Sub TextBox1_KeyPress(sender As Object, e As KeyPressEventArgs) Handles TextBox1.KeyPress
        If Not Char.IsControl(e.KeyChar) AndAlso Not Char.IsDigit(e.KeyChar) Then

            e.Handled = True

        End If
    End Sub

    Private Sub TextBox2_KeyPress(sender As Object, e As KeyPressEventArgs) Handles TextBox1.KeyPress
        If Not Char.IsControl(e.KeyChar) AndAlso Not Char.IsDigit(e.KeyChar) Then

            e.Handled = True

        End If
    End Sub

    Private Sub Label1_Click(sender As Object, e As EventArgs) Handles Label1.Click

    End Sub
End Class
