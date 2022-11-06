from django.contrib import admin
from django.urls import path
from main import views


urlpatterns = [
    path('', views.index, name='index'),
    path('feeds/', views.feeds, name='index-1'),
    path('admin/', admin.site.urls),
]
