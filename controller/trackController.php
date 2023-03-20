<?php
class TrackController
{
    // Add album
    public static function addTrack()
    {
        include_once('view/Tracks/addTrackForm.php');
        return;
    }
    public static function addTrackResult()
    {
        $result = TrackModel::addTrackResult();
        if ($result == true) {
            $trackList = Model::getTracks();
            $_SESSION['message'] = 'New track has been added successfully!';
            header('Location:albums');
        } else {
            $error = 'Failed to add tracks!';
            include_once('view/Tracks/addTrackForm.php');
        }
        return;
    }
    // Edit album
    public static function EditTrack($id)
    {
        $track = Model::getTrackById($id);
        include_once('view/Tracks/editTrackForm.php');
        return;
    }
    public static function editTrackResult($id)
    {
        $result = trackModel::editTrackResult($id);
        if ($result == true) {
            $_SESSION['message'] = 'Track with id: ' . $id . 'has been edited successfully!';
            $trackList = Model::getTracks();
            header('Location:albums');
        } else {
            $trackList = Model::getTrackById($id);
            $error = 'Failed to edit track!';
            include_once('view/Tracks/editTrackForm.php');
        }
        return;
    }
    public static function DeleteTrack($id)
    {
        $track = Model::getTrackById($id);
        include_once('view/Tracks/deleteTrackForm.php');
        return;
    }
    public static function deleteTrackResult($id)
    {
        $result = trackModel::deleteTrackResult($id);
        if ($result == true) {
            $_SESSION['message'] = 'Track with id: ' . $id . 'has been deleted successfully!';
            $trackList = Model::getTracks();
            header('Location:albums');
        } else {
            $trackList = Model::getTrackById($id);
            $error = 'Failed to delete track!';
            include_once('view/Tracks/deleteTrackForm.php');
        }
        return;
    }
} //END CLASS