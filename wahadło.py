import math
import matplotlib.pyplot as plt 

g = 9.81

L = float(input("Podaj długoś wahadłą w metrach: "))
theta0 = math.radians(float(input("Podaj początkowy kąt(w stopniach): ")))
omega0 = float(input("Podaj początkową prędkość kątową(w rad/s): "))

t_start = 0
t_stop = float(input("Podaj czas symulacji(w sekundach): "))
dt = float(input("Podaj krok czasowy(w sekundach): "))

t = [t_start]
theta = [theta0]
omega = [omega0]

while t[-1] < t_stop:
    theta_double_dot = -g / L * math.sin(theta[-1])
    omega_new = omega[-1] + theta_double_dot * dt
    theta_new = theta[-1] + omega_new * dt
    t_new = t[-1] + dt
    theta.append(theta_new)
    omega.append(omega_new)
    t.append(t_new)

plt.plot(t, theta)
plt.xlabel("Czas (s)")
plt.ylabel("Kąt nachylenia (rad)")
plt.show